<?php
/**
 * Compass Quote Engine
 * Quote of the Week
 */

function compass_quotes() {

   return [

    [
        'id' => 'stay-hungry-stay-foolish',
        'quote' => 'Stay hungry. Stay foolish.',
        'author' => 'Steve Jobs',
        'category' => 'Technology',
        'source' => 'Stanford Commencement Address (2005)',
    ],

    [
        'id' => 'the-map-is-not-the-territory',
        'quote' => 'The map is not the territory.',
        'author' => 'Alfred Korzybski',
        'category' => 'Philosophy',
        'source' => 'Science and Sanity',
    ],

    [
        'id' => 'programs-must-be-written-for-people',
        'quote' => 'Programs must be written for people to read, and only incidentally for machines to execute.',
        'author' => 'Harold Abelson',
        'category' => 'Programming',
        'source' => 'Structure and Interpretation of Computer Programs',
    ],

    [
        'id' => 'make-it-work',
        'quote' => 'Make it work, make it right, make it fast.',
        'author' => 'Kent Beck',
        'category' => 'Programming',
        'source' => 'Extreme Programming Explained',
    ],



    [
        'id' => 'best-way-to-predict',
        'quote' => 'The best way to predict the future is to invent it.',
        'author' => 'Alan Kay',
        'category' => 'Technology',
        'source' => 'PARC',
    ],

    [
        'id' => 'perfection-is-achieved',
        'quote' => 'Perfection is achieved, not when there is nothing more to add, but when there is nothing left to take away.',
        'author' => 'Antoine de Saint-Exupéry',
        'category' => 'Writing',
        'source' => 'Airman’s Odyssey',
    ],

    [
        'id' => 'the-owls-are-not-what-they-seem',
        'quote' => 'The owls are not what they seem.',
        'author' => 'Log Lady',
        'category' => 'Film & Television',
        'source' => 'Twin Peaks',
    ],

    [
        'id' => 'not-all-those-who-wander',
        'quote' => 'Not all those who wander are lost.',
        'author' => 'J.R.R. Tolkien',
        'category' => 'Literature',
        'source' => 'The Fellowship of the Ring',
    ],
    [
    'id' => 'science-is-a-way-of-thinking',
    'quote' => 'Science is a way of thinking much more than it is a body of knowledge.',
    'author' => 'Carl Sagan',
    'category' => 'Science',
    'source' => 'The Demon-Haunted World',
],

[
    'id' => 'extraordinary-claims',
    'quote' => 'Extraordinary claims require extraordinary evidence.',
    'author' => 'Carl Sagan',
    'category' => 'Science',
    'source' => 'Broca\'s Brain',
],

[
    'id' => 'programs-written-for-people',
    'quote' => 'Programs must be written for people to read, and only incidentally for machines to execute.',
    'author' => 'Harold Abelson',
    'category' => 'Programming',
    'source' => 'Structure and Interpretation of Computer Programs',
],

[
    'id' => 'predict-the-future',
    'quote' => 'The best way to predict the future is to invent it.',
    'author' => 'Alan Kay',
    'category' => 'Technology',
    'source' => 'Xerox PARC',
],

[
    'id' => 'simplicity-prerequisite',
    'quote' => 'Simplicity is prerequisite for reliability.',
    'author' => 'Edsger W. Dijkstra',
    'category' => 'Programming',
    'source' => 'Notes on Structured Programming',
],

[
    'id' => 'measure-lines-of-code',
    'quote' => 'Measuring programming progress by lines of code is like measuring aircraft building progress by weight.',
    'author' => 'Bill Gates',
    'category' => 'Programming',
    'source' => 'Commonly cited Microsoft remark',
],

[
    'id' => 'focus-is-saying-no',
    'quote' => 'Focusing is about saying no.',
    'author' => 'Steve Jobs',
    'category' => 'Leadership',
    'source' => 'Apple WWDC 1997',
],

[
    'id' => 'writing-easy-reading-hard',
    'quote' => 'Easy reading is damn hard writing.',
    'author' => 'Nathaniel Hawthorne',
    'category' => 'Writing',
    'source' => 'American Notebooks',
],

[
    'id' => 'chance-favors-prepared-mind',
    'quote' => 'Chance favors the prepared mind.',
    'author' => 'Louis Pasteur',
    'category' => 'Science',
    'source' => 'Lecture at the University of Lille',
],

[
    'id' => 'stay-hungry-stay-foolish',
    'quote' => 'Stay hungry. Stay foolish.',
    'author' => 'Steve Jobs',
    'category' => 'Technology',
    'source' => 'Stanford Commencement Address (2005)',
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