<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
    <div class="container-scroller">
        @include('admin.navbar')
    <div style="position: relative; top:60px; right:-150px;">
    <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div>
            <label>Title</label>
            <input style="color: blue" type="text" name="title" placeholder="Write a title">
        </div>
        <div>
            <label>Price</label>
            <input style="color: blue" type="num" name="price" placeholder="Write a price">
        </div>
        <div>
            <label>Image</label>
            <input style="color: black" type="file" name="image" placeholder="Upload an image">
        </div>
        <div>
            <label>Description</label>
            <input style="color: blue" type="text" name="description" placeholder="Write food description">
        </div>
        <div style="color: black">
            <input type="submit" value="Save">
        </div>

    </form>
    </div>
    </div>

    @include('admin.adminscript');
</body>
</html>