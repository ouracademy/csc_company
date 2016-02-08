<?php

use App\Core\Common\Range;

class RangeTest extends TestCase
{
    
    public function testCreateRange()
    {
        $range = new Range(5,7);
        $this->assertNotNull($range);
        $this->assertTrue($range->hasStart());
        $this->assertTrue($range->hasEnd());
    }
    
    /**
     * @expectedException ErrorException
     */
    public function testCreateInvalidRange()
    {
        $range = new Range(7,5);
    }
    
    public function testCreateOpenEndedRange()
    {
        $range = new Range(5, INF);//or use Range::startingOn(5);
        $this->assertNotNull($range);
        $this->assertTrue($range->hasStart());
        $this->assertFalse($range->hasEnd());
    }
    
    public function testCreateOpenStartRange()
    {
        $range = new Range(-INF,5);//or use Range::upTo(5);
        $this->assertNotNull($range);
        $this->assertFalse($range->hasStart());
        $this->assertTrue($range->hasEnd());
    }
    
    public function testCreateInfinityRange()
    {
        $range = new Range(-INF,INF);
        $this->assertNotNull($range);
        $this->assertFalse($range->hasStart());
        $this->assertFalse($range->hasEnd());
    }
    
    public function testAnyKindOfRangeDontContainInfinities()
    {
        $range = new Range(5,7);
        $this->assertFalse($range->contains(INF));
        $this->assertFalse($range->contains(-INF));
    }
    
    public function testAnyKindOfRangeContainEmptyRange()
    {
        $range = new Range(5,7);
        $this->assertTrue($range->contains(Range::EMPTY_RANGE));
        $this->assertTrue($range->contains(null));//The same as above
    }
    
    public function testContainsInClosedRange(){
        $range = new Range(5,7);
        $this->assertTrue($range->contains(5));
        $this->assertTrue($range->contains(6));
        $this->assertTrue($range->contains(7));
        $this->assertFalse($range->contains(4));
        $this->assertFalse($range->contains(8));
    }
    
    public function testContainsInOpenStartRange(){
        $range = new Range(5, INF);
        $this->assertFalse($range->contains(4));
        $this->assertTrue($range->contains(5));
        $this->assertTrue($range->contains(6));
    }
    
    public function testContainsInOpenEndedRange(){
        $range = new Range(-INF,5);
        $this->assertTrue($range->contains(4));
        $this->assertTrue($range->contains(5));
        $this->assertFalse($range->contains(6));
    }
    
    public function testOverlaps()
    {
        $range = new Range(5,10);
        $otherRange = new Range(6,12);
        $this->assertTrue($range->overlaps($otherRange));
    }
    
    public function testIncludes()
    {
        $range = new Range(5,10);
        $otherRange = new Range(6,8);
        $this->assertTrue($range->includes($otherRange));
    }
    
    public function testToString()
    {
        $range = new Range(5,10);
        $this->assertEquals('5 - 10',$range);
    }
}
