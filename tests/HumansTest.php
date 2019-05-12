<?php namespace Olssonm\Humans;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

use Artisan;

class HumansTest extends \Orchestra\Testbench\BrowserKit\TestCase {

	/**
	 * Setup
	 */
	public function setUp(): void
	{
		parent::setUp();
	}

	/**
	 * Load the package
	 * @return array the packages
	 */
	protected function getPackageProviders($app)
	{
		return [
			'Olssonm\Humans\ServiceProvider'
		];
	}

	/**
	 * Test a default visit
	 * @test
	 */
	public function testVisitDefault()
	{
		$this->visit('/humans.txt')
			->see('This is the default humans.txt-template');
	}

	/**
	 * Test a default visit using named route
	 * @test
	 */
	public function testVisitDefaultNamed()
	{
		$this->visit(route('humans.txt'))
			->see('This is the default humans.txt-template');
	}

	/**
	 * Test to publish vendor assets
	 * @test
	 */
	public function testVendorPublish()
	{
		Artisan::call('vendor:publish', [
			'--provider' => 'Olssonm\Humans\ServiceProvider'
		]);

		$output = Artisan::output();
		$test1 = false;
		$test2 = false;
		$test3 = false;

		if(strpos($output, 'Copied Directory') !== false) {
			$test1 = true;
		}

		if(strpos($output, 'l5-humans/src/resources/stubs') !== false) {
			$test2 = true;
		}

		if(strpos($output, 'views/vendor/humans') !== false) {
			$test3 = true;
		}

		$this->assertTrue($test1);
		$this->assertTrue($test2);
		$this->assertTrue($test3);
	}

	/**
	 * Test an installed visit
	 * @test
	 */
	public function testVisitInstalled()
	{
		$this->visit('/humans.txt')
			->see('Developer: Joe Doe');
	}

	/**
	 * Test an installed visit
	 * @test
	 */
	public function testVisitInstalledNamed()
	{
		$this->visit(route('humans.txt'))
			->see('Developer: Joe Doe');
	}

	/**
	 * Tear down and remove files
	 */
	public static function tearDownAfterClass(): void
	{
		unlink(base_path('resources/views') . '/vendor/humans/humans.blade.php');
		rmdir(base_path('resources/views') . '/vendor/humans');
		parent::tearDownAfterClass();
	}
}
