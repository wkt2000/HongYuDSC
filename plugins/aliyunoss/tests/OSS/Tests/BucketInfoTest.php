<?php
//zend by QQ:1527200768  鸿宇科技  禁止倒卖 一经发现停止任何服务
namespace OSS\Tests;

class BucketInfoTest extends \PHPUnit_Framework_TestCase
{
	public function testConstruct()
	{
		$bucketInfo = new \OSS\Model\BucketInfo('cn-beijing', 'name', 'today');
		$this->assertNotNull($bucketInfo);
		$this->assertEquals('cn-beijing', $bucketInfo->getLocation());
		$this->assertEquals('name', $bucketInfo->getName());
		$this->assertEquals('today', $bucketInfo->getCreateDate());
	}
}

?>
