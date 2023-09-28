<?php

class PackageDetailsModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getData()
    {
        $rajasthan_arr = [
            'page' => 'Rajasthan',
            'text' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus natus quos et blanditiis praesentium? Magnam fugiat dolorum laborum, minus vel sed cupiditate error assumenda expedita illum blanditiis quam at obcaecati, non atque laboriosam. Officia, soluta sunt vero exercitationem beatae ab nam animi dolor facilis facere minus. Sint, maxime incidunt! Placeat voluptas fugit ipsa error iusto nostrum exercitationem porro eligendi hic labore corporis suscipit a, animi esse perspiciatis, dicta autem, ab facilis quas quo iste! Animi adipisci asperiores numquam repellendus veritatis nihil facere ut expedita qui libero culpa blanditiis placeat esse voluptatum impedit rerum atque',

            'list' => [
                [
                    'name' => 'Goa Travel Package - 1',
                    'image' => 'assets/img/package/uttrakhand-1.jpg',
                    'reviews' => '50',
                    'time' => '3 Nights / 4 Days',
                    'condition' => 'Min 4 Persons',
                    'price' => '8000/-'
                ],
                [
                    'name' => 'Goa Travel Package - 2',
                    'image' => 'assets/img/package/uttrakhand-2.jpg',
                    'reviews' => '64',
                    'time' => '4 Nights / 4 Days',
                    'condition' => 'Min 2 Persons',
                    'price' => '10000/-'
                ],
                [
                    'name' => 'Goa Travel Package - 3',
                    'image' => 'assets/img/package/uttrakhand-3.jpg',
                    'reviews' => '124',
                    'time' => '2 Nights / 1 Days',
                    'condition' => 'Min 6 Persons',
                    'price' => '3000/-'
                ]
            ]
        ];
        return $rajasthan_arr;
    }
}
