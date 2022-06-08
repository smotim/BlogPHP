<?php

it('has news page', function () {
    $response = $this->get('/auth/roles');

    $response->assertStatus(500);
});
