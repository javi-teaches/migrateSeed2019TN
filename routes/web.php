<?php


use App\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$allProducts = Product::all();

	echo "<ul>";
	foreach ($allProducts as $product) {
		echo "<li>";
		echo $product->name;
		echo " - $ " . $product->price . "<br>";
		echo "<img src='/storage/products/$product->image' width='100'> <br>";
		echo "<b>Usuario:</b> " . $product->user->name . "<br>";
		echo "<b>Marca:</b> " . $product->brand->name . "<br>";
		echo "<b>Categoría:</b> " . $product->category->name . "<br>";
		echo "<b>Colores:</b><br>";
		echo "<ul>";
		foreach ($product->colors as $color) {
			echo "<li> $color->name </li>";
		}
		echo "</ul>";
		echo "<br>";
		echo "</li>";
	}
	echo "</ul>";

});
