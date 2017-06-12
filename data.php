<?php 
header('Access-Control-Allow-Origin: *');  
header('application/json');
$data = [
    [
			'category' => 'games',
			'title' => 'Metal Gear Solid',
			'description' => 'Juego de acción y espionaje desarrollado por Konami.', 
			'videoId' => '9vUJMJfONro'
    ],
    [
			'category' => 'games',
			'title' =>  'Resident Evil 2',
			'description' => 'Juego de Survivor Horror en la que 2 personajes deben sobrevivir a un ataque Zombie en Raccoon City', 
			'videoId' =>  '9UCXmSLL5eA'
    ],
    [
			'category' =>  'games',
			'title' =>  'Parasite Eve 2',
			'description' => 'Famoso juego de Rol y Survivor Horror en la que le persona poseé poderes psíquicos.', 
			'videoId' =>  'XR1erLxEKmA'
    ],
    [
			'category' =>  'music',
			'title' =>  'Stryper',
			'description' =>  'Banda de Americana de Heavy Metal basada en el Cristinaismo.', 
			'videoId' =>  'Z9m7yJQJyZE'
    ],
    [
			'category' =>  'anime',
			'title' =>  'Freezer vs Pikoro',
			'description' =>  'Increíble pelea de Freezer vs Pikoro en Namek.', 
			'videoId' =>  'obhp_0jefwA'
    ],
];

print_r (json_encode($data));