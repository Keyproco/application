<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <title>
@yield('title')


</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
         @include('layouts.nav')
  <div id="chart"  class="columns" >
    <div class="column is-narrow">
      <section>
        <aside style="background-color: white;" class="menu">
          <p class="menu-label">Général</p>
          <ul class="menu-list">
            <li >
              <router-link to="/admin/dashboard/" exact > Tableau de bord </router-link>
            </li>
            <li>
              <a>Commandes</a>
            </li>
            <li>
              <a>Paniers</a>
            </li>
          </ul>
          <p class="menu-label">Gestion des aliments</p>
          <ul class="menu-list">
            <li>
               <router-link to="/admin/dashboard/manage-products" exact> Gérer les produits </router-link>
            </li>
          </ul>
          <p class="menu-label">Gestion des ressources</p>
          <ul class="menu-list">
            <li>
              <a>Permissions</a>
            </li>
            <li>
 <router-link to="/admin/dashboard/manage-users" exact > Utilisateurs</router-link>
            </li>
            <li>
              <a>Staff</a>
            </li>
          </ul>
        </aside>
      </section>
    </div>
      <div   style="background-color:rgb(241, 242, 246)"  class="column">  <router-view> </router-view></div>
  </div>

</body>
</html>

<style>
.menu-list a {
    color: rgb(133, 138, 150);
    font-weight: 600;
}
.menu-list a.is-active {
    color: rgb(113, 218, 255);
    background-color: white;
    border-bottom:1px solid rgb(113, 218, 255)
}
.menu-list a.is-active {
  color:rgb(113, 218, 255);
  background-color: none;
}
.menu-list a.is-active:hover {
  color:rgb(113, 218, 255);
  background-color: none;
}
.menu-list a:hover {
    background-color: none;
    color: rgba(133, 138, 150, 0.8);
}</style>
