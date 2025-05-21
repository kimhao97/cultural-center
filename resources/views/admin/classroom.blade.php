<!DOCTYPE html>
   <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Your Title</title>
       @include('admin.partials.styles')
   </head>
   <body class="boxed-size">
       @include('admin.partials.preloader')
       @include('admin.partials.sidebar')

       <div class="container-fluid">
           <div class="main-content d-flex flex-column">
               @include('admin.partials.header')
               <div class="main-content-container overflow-hidden">
                   <!-- Your content here -->
               </div>
           </div>
       </div>

       @include('admin.partials.footer')
       @include('admin.partials.theme_settings')
       @include('admin.partials.scripts')
   </body>
   </html>