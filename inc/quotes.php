<?php
/**
 * Compass Quote Engine
 * Quote of the Week
 */

function compass_quotes() {

    return [

        [
            'quote'  => 'Stay hungry. Stay foolish.',
            'author' => 'Steve Jobs',
        ],

        [
            'quote'  => 'The map is not the territory.',
            'author' => 'Alfred Korzybski',
        ],

        [
            'quote'  => 'Programs must be written for people to read.',
            'author' => 'Harold Abelson',
        ],

        [
            'quote'  => 'Make it work. Make it right. Make it fast.',
            'author' => 'Kent Beck',
        ],

        [
            'quote'  => 'Simplicity is the ultimate sophistication.',
            'author' => 'Leonardo da Vinci',
        ],

        [
            'quote'  => 'Walking on water and developing software from a specification are easy if both are frozen.',
            'author' => 'Edward V. Berard',
        ],

        [
            'quote'  => 'First, solve the problem. Then, write the code.',
            'author' => 'John Johnson',
        ],

        [
            'quote'  => 'The best way to predict the future is to invent it.',
            'author' => 'Alan Kay',
        ],

        [
            'quote'  => 'Perfection is achieved not when there is nothing more to add, but when there is nothing left to take away.',
            'author' => 'Antoine de Saint-Exupéry',
        ],

        [
            'quote'  => 'The impediment to action advances action. What stands in the way becomes the way.',
            'author' => 'Marcus Aurelius',
        ],

        [
            'quote'  => 'Not all those who wander are lost.',
            'author' => 'J.R.R. Tolkien',
        ],

        [
            'quote'  => 'The owls are not what they seem.',
            'author' => 'Log Lady',
        ],

    ];

}

function compass_quote_of_the_week() {

    $quotes = compass_quotes();

    $week = (int) date('W');

    return $quotes[$week % count($quotes)];

}

function compass_footer_quote() {

    $quote = compass_quote_of_the_week();

    return sprintf(
        '<blockquote class="compass-quote">
            <p>"%s"</p>
            <cite>&mdash; %s</cite>
        </blockquote>',
        esc_html($quote['quote']),
        esc_html($quote['author'])
    );

}

add_shortcode(
    'compass_quote',
    'compass_footer_quote'
);