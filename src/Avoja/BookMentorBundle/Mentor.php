<?php

namespace Avoja\BookMentorBundle;

class Mentor 
{
    private $tweets_json = <<<EOF
{"results":[{"from_user_id_str":"93321896","profile_image_url":"http://a1.twimg.com/profile_images/848612604/jakuza-cro_p_normal.jpg","created_at":"Fri, 24 Jun 2011 08:43:13 +0000","from_user":"jacoporomei","id_str":"84179760900612096","metadata":{"result_type":"recent"},"to_user_id":null,"text":"Working on a #php #tdd screencast with @cirpo.","id":84179760900612096,"from_user_id":93321896,"geo":null,"iso_language_code":"en","to_user_id_str":null,"source":"&lt;a href=&quot;http://twitter.com/&quot;&gt;web&lt;/a&gt;"},{"from_user_id_str":"93321896","profile_image_url":"http://a1.twimg.com/profile_images/848612604/jakuza-cro_p_normal.jpg","created_at":"Fri, 24 Jun 2011 07:32:57 +0000","from_user":"jacoporomei","id_str":"84162075110285312","metadata":{"result_type":"recent"},"to_user_id":null,"text":"Oggi sono un bra\u00f6 gnaro in Val Trompia. /cc @webdebresa","id":84162075110285312,"from_user_id":93321896,"geo":{"type":"Point","coordinates":[45.584,10.2175]},"iso_language_code":"it","to_user_id_str":null,"source":"&lt;a href=&quot;http://twitter.com/#!/download/iphone&quot; rel=&quot;nofollow&quot;&gt;Twitter for iPhone&lt;/a&gt;"},{"from_user_id_str":"93321896","profile_image_url":"http://a1.twimg.com/profile_images/848612604/jakuza-cro_p_normal.jpg","created_at":"Fri, 24 Jun 2011 06:29:06 +0000","from_user":"jacoporomei","id_str":"84146009189519361","metadata":{"result_type":"recent"},"to_user_id":null,"text":"Non mi svegliavo cos\u00ec presto per fare allenamento #tdd tutto il giorno dai tempi dell'accademia militare.","id":84146009189519361,"from_user_id":93321896,"geo":null,"iso_language_code":"it","to_user_id_str":null,"source":"&lt;a href=&quot;http://twitter.com/&quot;&gt;web&lt;/a&gt;"},{"from_user_id_str":"93321896","profile_image_url":"http://a1.twimg.com/profile_images/848612604/jakuza-cro_p_normal.jpg","created_at":"Thu, 23 Jun 2011 21:05:27 +0000","from_user":"jacoporomei","id_str":"84004162534248448","metadata":{"result_type":"recent"},"to_user_id":null,"text":"RT @ingdavidino: Adobe Edge, in arrivo la versione definitiva del tool per convertire Flash in HTML5: In un nuovo video Adobe mos... http://bit.ly/k2QWTO","id":84004162534248448,"from_user_id":93321896,"geo":null,"iso_language_code":"it","to_user_id_str":null,"source":"&lt;a href=&quot;http://twitterfeed.com&quot; rel=&quot;nofollow&quot;&gt;twitterfeed&lt;/a&gt;"},{"from_user_id_str":"93321896","profile_image_url":"http://a1.twimg.com/profile_images/848612604/jakuza-cro_p_normal.jpg","created_at":"Thu, 23 Jun 2011 20:55:29 +0000","from_user":"jacoporomei","id_str":"84001654499852288","metadata":{"result_type":"recent"},"to_user_id":8675931,"text":"@areaweb Non credo di avere dubbi su questo. A breve termine invece... #roi /cc @Eta @Giuliano_noci","id":84001654499852288,"from_user_id":93321896,"to_user":"areaweb","geo":null,"iso_language_code":"it","to_user_id_str":"8675931","source":"&lt;a href=&quot;http://www.tweetdeck.com&quot; rel=&quot;nofollow&quot;&gt;TweetDeck&lt;/a&gt;"},{"from_user_id_str":"93321896","profile_image_url":"http://a1.twimg.com/profile_images/848612604/jakuza-cro_p_normal.jpg","created_at":"Thu, 23 Jun 2011 20:54:01 +0000","from_user":"jacoporomei","id_str":"84001283605925888","metadata":{"result_type":"recent"},"to_user_id":null,"text":"RT @matteoc: Grande nome per un talk @jacoporomei: [ITA] Il mio talk &quot;Smetti di iniziare, inizia a smettere&quot; al #pwes","id":84001283605925888,"from_user_id":93321896,"geo":null,"iso_language_code":"it","to_user_id_str":null,"source":"&lt;a href=&quot;http://twitter.com/#!/download/ipad&quot; rel=&quot;nofollow&quot;&gt;Twitter for iPad&lt;/a&gt;"},{"from_user_id_str":"93321896","profile_image_url":"http://a1.twimg.com/profile_images/848612604/jakuza-cro_p_normal.jpg","created_at":"Thu, 23 Jun 2011 20:53:53 +0000","from_user":"jacoporomei","id_str":"84001252337397760","metadata":{"result_type":"recent"},"to_user_id":118850778,"text":"@bittastic @emadb @areaweb Niente... un meme autosufficiente ormai... :-)","id":84001252337397760,"from_user_id":93321896,"to_user":"bittastic","geo":null,"iso_language_code":"it","to_user_id_str":"118850778","source":"&lt;a href=&quot;http://www.tweetdeck.com&quot; rel=&quot;nofollow&quot;&gt;TweetDeck&lt;/a&gt;"},{"from_user_id_str":"93321896","profile_image_url":"http://a1.twimg.com/profile_images/848612604/jakuza-cro_p_normal.jpg","created_at":"Thu, 23 Jun 2011 20:53:09 +0000","from_user":"jacoporomei","id_str":"84001065288220672","metadata":{"result_type":"recent"},"to_user_id":4205293,"text":"@emadb @areaweb #daicazzo! :-) ve odio... :-)","id":84001065288220672,"from_user_id":93321896,"to_user":"emadb","geo":null,"iso_language_code":"es","to_user_id_str":"4205293","source":"&lt;a href=&quot;http://www.tweetdeck.com&quot; rel=&quot;nofollow&quot;&gt;TweetDeck&lt;/a&gt;"},{"from_user_id_str":"93321896","profile_image_url":"http://a1.twimg.com/profile_images/848612604/jakuza-cro_p_normal.jpg","created_at":"Thu, 23 Jun 2011 15:20:05 +0000","from_user":"jacoporomei","id_str":"83917248011571200","metadata":{"result_type":"recent"},"to_user_id":null,"text":"Grazie a tuttiiiiiii!!!!!!!!!!!!! Un sacco di chiacchere utili oggi! Ciaoooooo! #wpes","id":83917248011571200,"from_user_id":93321896,"geo":null,"iso_language_code":"it","to_user_id_str":null,"source":"&lt;a href=&quot;http://www.tweetdeck.com&quot; rel=&quot;nofollow&quot;&gt;TweetDeck&lt;/a&gt;"},{"from_user_id_str":"93321896","profile_image_url":"http://a1.twimg.com/profile_images/848612604/jakuza-cro_p_normal.jpg","created_at":"Thu, 23 Jun 2011 15:12:20 +0000","from_user":"jacoporomei","id_str":"83915295147819009","metadata":{"result_type":"recent"},"to_user_id":null,"text":"RT @nicolamattina: La proponiamo a graziearcazzo.com? ;-) @riccardowired: @riotta sono contro la cattiva informazione di carta online","id":83915295147819009,"from_user_id":93321896,"geo":null,"iso_language_code":"it","to_user_id_str":null,"source":"&lt;a href=&quot;http://twitter.com/#!/download/iphone&quot; rel=&quot;nofollow&quot;&gt;Twitter for iPhone&lt;/a&gt;"},{"from_user_id_str":"93321896","profile_image_url":"http://a1.twimg.com/profile_images/848612604/jakuza-cro_p_normal.jpg","created_at":"Thu, 23 Jun 2011 15:10:10 +0000","from_user":"jacoporomei","id_str":"83914750576181248","metadata":{"result_type":"recent"},"to_user_id":8675931,"text":"@areaweb s\u00ec, \u00e8 possibile... :-)","id":83914750576181248,"from_user_id":93321896,"to_user":"areaweb","geo":null,"iso_language_code":"it","to_user_id_str":"8675931","source":"&lt;a href=&quot;http://www.tweetdeck.com&quot; rel=&quot;nofollow&quot;&gt;TweetDeck&lt;/a&gt;"},{"from_user_id_str":"93321896","profile_image_url":"http://a1.twimg.com/profile_images/848612604/jakuza-cro_p_normal.jpg","created_at":"Thu, 23 Jun 2011 15:05:34 +0000","from_user":"jacoporomei","id_str":"83913594437255168","metadata":{"result_type":"recent"},"to_user_id":null,"text":"RT @areaweb: la compagni di giro dei @webdebresa in modalit\u00e0 cazzeggio, sappiatelo #pwes","id":83913594437255168,"from_user_id":93321896,"geo":null,"iso_language_code":"it","to_user_id_str":null,"source":"&lt;a href=&quot;http://twitter.com/&quot;&gt;web&lt;/a&gt;"},{"from_user_id_str":"93321896","profile_image_url":"http://a1.twimg.com/profile_images/848612604/jakuza-cro_p_normal.jpg","created_at":"Thu, 23 Jun 2011 15:05:05 +0000","from_user":"jacoporomei","id_str":"83913471565111296","metadata":{"result_type":"recent"},"to_user_id":null,"text":"Fermate Rastelli!!!!!  \u00c8 molesto!!!! :-D @webdebresa @areaweb #pwes","id":83913471565111296,"from_user_id":93321896,"geo":null,"iso_language_code":"it","to_user_id_str":null,"source":"&lt;a href=&quot;http://www.tweetdeck.com&quot; rel=&quot;nofollow&quot;&gt;TweetDeck&lt;/a&gt;"},{"from_user_id_str":"93321896","profile_image_url":"http://a1.twimg.com/profile_images/848612604/jakuza-cro_p_normal.jpg","created_at":"Thu, 23 Jun 2011 14:59:53 +0000","from_user":"jacoporomei","id_str":"83912162237628416","metadata":{"result_type":"recent"},"to_user_id":8675931,"text":"@areaweb Dai maledetto!!! :-P #pwes","id":83912162237628416,"from_user_id":93321896,"to_user":"areaweb","geo":null,"iso_language_code":"it","to_user_id_str":"8675931","source":"&lt;a href=&quot;http://www.tweetdeck.com&quot; rel=&quot;nofollow&quot;&gt;TweetDeck&lt;/a&gt;"},{"from_user_id_str":"93321896","profile_image_url":"http://a1.twimg.com/profile_images/848612604/jakuza-cro_p_normal.jpg","created_at":"Thu, 23 Jun 2011 14:42:15 +0000","from_user":"jacoporomei","id_str":"83907724601073664","metadata":{"result_type":"recent"},"to_user_id":4186256,"text":"@robertolupi Interesting. I am interested.","id":83907724601073664,"from_user_id":93321896,"to_user":"robertolupi","geo":null,"iso_language_code":"en","to_user_id_str":"4186256","source":"&lt;a href=&quot;http://www.tweetdeck.com&quot; rel=&quot;nofollow&quot;&gt;TweetDeck&lt;/a&gt;"}],"max_id":84229278102863872,"since_id":0,"refresh_url":"?since_id=84229278102863872&q=from%3Ajacoporomei","next_page":"?page=2&max_id=84229278102863872&q=from%3Ajacoporomei","results_per_page":15,"page":1,"completed_in":0.042844,"since_id_str":"0","max_id_str":"84229278102863872","query":"from%3Ajacoporomei"}
EOF;
    
    private $books = array(
        'The Tao of Physics', 
        'Pro PHP Refactoring',
        'The Hitchhiker\'s Guide to the Galaxy',
        'Cinderella',
        'The Mind\'s I',
        'Toyota Production System',
        'The Goal',
        'My Name is Red',
    );
    
    public function getTweets(\stdClass $json)
    {
        $tweets = array();
        
        foreach ($json->results as $result) {
            $tweets[] = $result->text;
        }
        
        return $tweets;
    }
    
    public function extractKeyWords($phrases)
    {
        $blacklist = array('in', 'the', 'is', 'on');
        $keywords = array();
        
        foreach ($phrases as $phrase) {
            $words = explode(' ', $phrase);
            foreach ($words as $word) {
                if (!in_array($word, $blacklist) && false === strpos($word, '@')) {
                    $keywords[$word] = trim($word, '#');
                }
            }
        }
        
        return $keywords;
    }

    public function suggestFor($username)
    {
//        $this->extractKeyWords($this->getTweets($this->tweets_json));
        
        if ($username == 'jacoporomei') {
            return array(
                'The Tao of Physics', 
                'Pro PHP Refactoring',
                'The Hitchhiker\'s Guide to the Galaxy'
            );
        }
        
        return array();
    }
}
