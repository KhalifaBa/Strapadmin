<?php
include 'C:\xampp\htdocs\Strapadmin\connexion.php';
if (!isset($_SESSION))
{
    session_start();
}
if (!isset($_SESSION['panier']))
{
    $_SESSION['panier'] = array();
}
echo $_GET['id'];

if (isset($_GET['id']))
{
    $id = $_GET['id'];
    $produit = mysqli_query($con,"SELECT * FROM formule WHERE id = $id");
    if (empty(mysqli_fetch_assoc($produit)))
    {
        die("La formule n'existe plus");
    }
    if (isset($_SESSION['panier'][$id]))
    {
        $_SESSION['panier'][$id]++; // rajoute + 1 dans quantité
    }else
    {
        $_SESSION['panier'][$id] = 1;
        header("Location:pricing.php");

    }
}
