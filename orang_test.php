<?php 
	
	require_once('simpletest/autorun.php');
	require_once('orang.php');
	
		class TestOrang extends UnitTestCase {
			
			function TestStatusUsia() {
				
				$o = new Orang();
					$o->nama = 'Miftah';
					$a = $o->umur=21;
				
				$this->assertNotNull($a);
				
			}
			
		}
	$test = new TestOrang('Testing Unit Test');
	$test->run(new HTMLReporter());
?>
