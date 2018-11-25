<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('home/index');
    }

    public function get_tweets($username, $offset, $limit)
    {

        $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
        $getfield = "?screen_name={$username}&count=".abs($limit);
        if($offset > 0 && $limit > 0) {
            $getfield .= "&max_id={$offset}";
        } elseif ($offset >  0 && $limit < 0) {
            $getfield .= "&since_id={$offset}";
        }
        $requestMethod = 'GET';
        $twitter = new TwitterAPIExchange([
            'oauth_access_token' => $this->config->item('twitter_oauth_access_token'),
            'oauth_access_token_secret' => $this->config->item('twitter_oauth_access_token_secret'),
            'consumer_key' => $this->config->item('twitter_consumer_key'),
            'consumer_secret' => $this->config->item('twitter_consumer_secret')
        ]);
        echo $twitter->setGetfield($getfield)
            ->buildOauth($url, $requestMethod)
            ->performRequest();
    }
}