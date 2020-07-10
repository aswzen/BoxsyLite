<?php include('header.php'); ?>
<template>
  <div class="page">
    <div class="page-content">

        <div class="navbar">
            <div class="navbar-bg"></div>
            <div class="navbar-inner">
                <div class="left">
                    <a href="#" onClick="goBack()" class="link"><i class="f7-icons">arrow_left</i></a>
                    <div class="title">
                        Search Item
                    </div>
                </div>
            </div>
        </div>

        <form class="searchbar">
            <div class="searchbar-inner">
                <div class="searchbar-input-wrap">
                    <input type="search" placeholder="Search">
                    <i class="searchbar-icon"></i>
                    <span class="input-clear-button"></span>
                </div>
                <span class="searchbar-disable-button if-not-aurora">Cancel</span>
            </div>
        </form>

        <!-- Searchbar backdrop -->
        <div class="searchbar-backdrop"></div>
        <!-- search target list -->
        <div class="list searchbar-found">
          <ul>
            <li class="item-content">
              <div class="item-inner">
                <div class="item-title">Acura</div>
              </div>
            </li>
            <li class="item-content">
              <div class="item-inner">
                <div class="item-title">Audi</div>
              </div>
            </li>
            <li class="item-content">
              <div class="item-inner">
                <div class="item-title">BMW</div>
              </div>
            </li>
            <li class="item-content">
              <div class="item-inner">
                <div class="item-title">Volvo</div>
              </div>
            </li>
          </ul>
        </div>
    </div>
</div>  
</template>