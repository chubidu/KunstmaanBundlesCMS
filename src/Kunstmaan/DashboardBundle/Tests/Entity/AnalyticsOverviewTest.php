<?php

namespace Kunstmaan\ConfigBundle\Tests\Entity;

use Kunstmaan\DashboardBundle\Entity\AnalyticsGoal;
use Kunstmaan\DashboardBundle\Entity\AnalyticsOverview;
use PHPUnit_Framework_TestCase;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-09-04 at 16:54:04.
 */
class AnalyticsOverviewTest extends PHPUnit_Framework_TestCase
{
    public function testGettersAndSetters()
    {
        $goal = new AnalyticsGoal();
        $goal->setVisits(500);

        $entity = new AnalyticsOverview();
        $entity->setTitle('Donald Trump');
        $entity->setConfig(5);
        $entity->setStartOffset(6);
        $entity->setTimespan(7);
        $entity->setSessions(8);
        $entity->setUsers(9);
        $entity->setPageviews(10);
        $entity->setPagesPerSession(11);
        $entity->setAvgSessionDuration(12);
        $entity->setUseYear(2017);
        $entity->setChartDataMaxValue(13);
        $entity->setSegment(14);
        $entity->setReturningUsers(15);
        $entity->setNewUsers(1.23);
        $entity->setChartData([]);
        $entity->setGoals([$goal]);

        $this->assertEquals('Donald Trump', $entity->getTitle());
        $this->assertEquals(5, $entity->getConfig());
        $this->assertEquals(6, $entity->getStartOffset());
        $this->assertEquals(7, $entity->getTimespan());
        $this->assertEquals(8, $entity->getSessions());
        $this->assertEquals(9, $entity->getUsers());
        $this->assertEquals(10, $entity->getPageviews());
        $this->assertEquals(11, $entity->getPagesPerSession());
        $this->assertEquals(12, $entity->getAvgSessionDuration());
        $this->assertEquals(2017, $entity->getUseYear());
        $this->assertEquals(13, $entity->getChartDataMaxValue());
        $this->assertEquals(14, $entity->getSegment());
        $this->assertEquals(15, $entity->getReturningUsers());
        $this->assertEquals(1.23, $entity->getNewUsers());
        $this->assertTrue(is_array($entity->getChartData()));
        $this->assertTrue(is_array($entity->getGoals()));
        $this->assertEquals(188, $entity->getReturningUsersPercentage());
        $this->assertEquals(15.0, $entity->getNewUsersPercentage());
        $this->assertTrue(is_array($entity->getActiveGoals()));
    }
}
