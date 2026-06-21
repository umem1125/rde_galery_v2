<?php

it('shows homepage successfully', function (){
    $response = $this->get("/");
    $response->assertStatus(200);
});
