<?php 
add_action( 'acf/init', 'books_acf_add_local_field_group');

function books_acf_add_local_field_group() {
    if(function_exists('acf_add_local_field_group')):
        acf_add_local_field_group(array(
            'key' => 'group_1',
            'title' => 'Szczegóły książki',
            'fields' => array(
                array(
                    'key' => 'field_1',
                    'label' => 'Autor',
                    'name' => 'author',
                    'type' => 'text',
                    'instructions' => 'Podaj autora książki',
                    ),
                array(
                    'key' => 'field_2',
                    'label' => 'Rok wydania',
                    'name' => 'publishing_year',
                    'type' => 'number',
                    'instructions' => 'W którym roku została wydana ta książka?',
                    ),
                array(
                    'key' => 'field_3',
                    'label' => 'Gatunek',
                    'name' => 'genere',
                    'type' => 'text',
                    'instructions' => 'Podaj gatunek książki',
                    )
                ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'books',
                    ),
                ),
            ),
        ));
    endif;
}
?>