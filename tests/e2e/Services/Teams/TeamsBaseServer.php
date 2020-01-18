<?php

namespace Tests\E2E\Services\Teams;

use Tests\E2E\Client;

trait TeamsBaseServer
{
    /**
     * @depends testCreateTeam
     */
    public function testGetTeamMembers($data):array
    {
        $uid = (isset($data['teamUid'])) ? $data['teamUid'] : '';

        /**
         * Test for SUCCESS
         */
        $response = $this->client->call(Client::METHOD_GET, '/teams/'.$uid.'/members', array_merge([
            'content-type' => 'application/json',
            'x-appwrite-project' => $this->getProject()['$uid'],
        ], $this->getHeaders()));

        $this->assertEquals(200, $response['headers']['status-code']);
        $this->assertCount(0, $response['body']);

        /**
         * Test for FAILURE
         */

         return [];
    }
}