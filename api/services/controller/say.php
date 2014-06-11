<?php

class Say {

    /**
     * @url GET /say/hello
     * @param    string  $to       to parameter
     */
    function hello($to = 'world') {
        return "Hello $to!";
    }

    /**
     * @url GET /say/test
     */
    function test($to = 'world') {
        return "Test: " . $to;
    }

    /**
     * @url POST /say/ipost 
     *     
     */
    function ipost() {
        return "This is post method";
    }

    /**
     * @url PUT /say/iput 
     *     
     */
    function iput() {
        return "This is put method";
    }

    /**
     * @url DELETE /say/idelete 
     *     
     */
    function idelete() {
        return "This is delete method";
    }

}
