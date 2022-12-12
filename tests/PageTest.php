<?php declare(strict_types=1);
  require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

final class PageTest extends TestCase
{
    public function testSomething(): void
    {
        // Request a specific page
//        $page_response = file_get_contents('https://guestbook.briantoone.repl.co/');
//        $this->assertStringContainsString("View our guestbook below", $page_response);

        // Create a client with a base URI
        $client = new GuzzleHttp\Client();
        $response = $client->get('https://guestbook.briantoone.repl.co/');
        $body = $response->getBody();
        // Implicitly cast the body to a string and echo it
        echo $body;
        // Explicitly cast the body to a string
        $stringBody = (string) $body;
        $this->assertStringContainsString("View our guestbook below", $stringBody);
        
    }
}