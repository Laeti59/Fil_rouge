<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['accueil'] = 'PageAccueil/index'; 
$route['EspacePro'] = 'EspacePro/recupereNom/id';

// Espace Professionnel dédié aux véhicules
$route['AfficherVehicule'] = 'Crud/afficherVehicule/id';
$route['AjouterVehicule'] = 'Crud/ajouterVehicule';
$route['SupprimerVehicule'] = 'Crud/supprimerVehicule/id';
$route['ModifierVehicule'] = 'Crud/modifierVehicule';

// Espace Professionnel dédié aux clients
$route['AfficherClient'] = 'CrudClient/afficherClient/id';
$route['AjouterClient'] = 'CrudClient/ajouterClient';
$route['SupprimerClient'] = 'CrudClient/supprimerClient/id';
$route['ModifierClient'] = 'CrudClient/modifierClient';

// Espace Professionnel dédié aux employés
$route['AfficherEmployes'] = 'CrudEmployees/afficherEmployes';
$route['AjouterEmployes'] = 'CrudEmployees/ajouterEmployes';
$route['ModifierEmployes'] = 'CrudEmployees/modifierEmployes';
$route['SupprimerEmployes'] = 'CrudEmployees/supprimerEmployes';

$route['PageVendeur'] = 'PageClient/contactVendeur';
$route['PageAcheteur'] = 'PageClient/contactAcheteur';

// Fiches véhicules
$route['CitroenAircross'] = 'FicheVehicule/recupererId/1';
$route['Peugeot3008'] = 'FicheVehicule/recupererId/2';
$route['Peugeot5008'] = 'FicheVehicule/recupererId/3';
$route['JeepGrandCherokee'] = 'FicheVehicule/recupererId/4';
$route['MercedesClasseA'] = 'FicheVehicule/recupererId/5';
$route['OpelZafira2017'] = 'FicheVehicule/recupererId/6';
$route['Peugeot308'] = 'FicheVehicule/recupererId/7';
$route['OpelZafira2010'] = 'FicheVehicule/recupererId/8';


