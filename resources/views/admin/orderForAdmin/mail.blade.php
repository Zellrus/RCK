<h6 class = "fw-bold"> {{$name}}</h6>
<h6 class = "fw-norval">Почта: {{$email}}. Номер телефона: {{$number}}</h6>
<h6 class = "fw-norval">Продукт: {{\App\Models\Product::find($id_product)->name}} Категория: {{\App\Models\Product::find($id_product)->category->title}}</h6>
<h6 class = "fw-norval">Сообщение: {{$message}}</h6>
