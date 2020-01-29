<!doctype html>
<html lang="en" xmlns:v-on="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml">
<head>
    <script src="js/app.js"></script>
    <link href="css/app.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
    <script src="/js/Mh1PersianDatePicker.js"></script>
    <link href="/css/Mh1PersianDatePicker.css" rel="stylesheet">
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div id="app">
    <div class="container">
        <div class="col-md-12" id="edit" style="margin: 0 auto;display: none;">
            <div class="col-md-6 divForm">
                <form v-on:submit.prevent="saveEdit(vue)" method="post">
                    @csrf
                    <input v-model="vue.name" class="form-control block mb-3 mt-5">
                    <button class="btn btn-outline-danger btn-block">Edit</button>
                </form>
            </div>
        </div>


        <div class="col-md-12" id="save" style="margin: 0 auto;">
            <div class="col-md-6" style="margin: 0 auto;">
                <input @click="onclick()" style="text-align: left;margin-top:85px;" v-on:keyup="vueSearch()" v-model="nameSearch"
                       class="form-control block mb-3" placeholder="Enter Search...">
                <input  @click="onclick()" name="name" id="name" style="text-align: left;z-index: 1;" v-model="name" class="form-control block mb-3 name"
                       placeholder="Enter Your Name...">
                <div v-cloak class="alert alert-danger alert-sefaresh-danger" v-bind:class="{ hidden:hasError }">
                    Please enter your name!!!
                </div>
                <div v-cloak class="alert alert-success alert-sefaresh-success" v-bind:class="{ hidden:hasDeleted }">
                    Deleted Successfully!!!
                </div>
                <button @click="storeVue()" class="btn btn-outline-success btn-block" style="z-index: 2;">Save!</button>
            </div>
            <div class="col-md-6 mt-4" style="margin: 0 auto;overflow-y: auto;height: 400px;">
                <table class="table table-responsive-md border-danger">
                    <tr>
                        <td style="text-align: center;">Number</td>
                        <td style="text-align: center;">Name</td>
                        <td style="text-align: center;">Delete</td>
                        <td style="text-align: center;">Edit</td>
                    </tr>
                    <tr v-for="(index,item) in all">
                        <td style="text-align: center;" v-cloak>@{{ item+1 }}</td>
                        <td style="text-align: center;" v-cloak>@{{ index.name }}</td>
                        <td v-cloak style="text-align: center;" @click="deleteVue(index)"><img
                                    style="width: 20px;height: 20px;cursor: pointer;" src="/img/d.png"></td>
                        <td v-cloak style="text-align: center;" @click="Updatevue(index)"><img
                                    style="width: 20px;height: 20px;cursor: pointer;" src="/img/e.png"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{ asset('js/app.js') }}" async defer></script>

</html>