<h2>Поступила заявка с сайта <i>{{ env('APP_NAME') }}</i></h2>

Заполнена форма: <b>{{ $data['form_name'] }}</b><br>

@if(isset($data['product']))
    Профиль: <b>{{ $data['product'] }}</b><br>
@endif

@if(isset($data['text']))
    Текст: <b>{{ $data['text'] }}</b><br>
@endif

@if(isset($data['name']))
    Имя клиента: <b>{{ $data['name'] }}</b><br>
@endif

@if(isset($data['phone']))
    Телефон клиента: <b>{{ $data['phone'] }}</b><br>
@endif

@if(isset($data['period']))
    Срок кредита: <b>{{ $data['period'] }}</b>
@endif
