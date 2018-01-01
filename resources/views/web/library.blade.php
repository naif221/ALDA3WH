@include('web.navbar')

<div class="container">
                <div class="col-lg-12">
                    <h1 class="page-header">المكتبة</h1>

                    <p>

                    تعرض هذه الصفحة جميع الكتب و النشرات المتوفره لدى المكتب مصنفة بجميع اللغات ,<br> حيث يمكنك التوجه للمكتب وطلب الكتاب بعد البحث عنه و التاكد من توفره.

                    </p>
                
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        <th>الرقم</th>
                                        <th>اسم الكتاب</th>
                                        <th>اللغة</th>
                                        <th>المؤلف</th>
                                            </tr>
                                    </thead>
                                    <tbody>
@foreach($Books as $book)
                                        <tr class="odd gradeX">
                                            <td>{{$book->id}}</td>
                                            <td>{{$book->name}}</td>
                                            <td>{{$book->language->language}}</td>
                                            <td>{{$book->author->name}}</td>
                                        </tr>
@endforeach
                                    </tbody>
                                </table>
                            
</div>

        </div>
</div>  

@include('web.footer')
@include('cpac.style.footer')