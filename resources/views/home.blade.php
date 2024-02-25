@include('layout.head')
    <?php
    unset($_POST);
    if(!isset($msg_tel))
    $msg_tel = 'Номер телефона';
    if(!isset($msg_pin))
    $msg_pin = 'Пин-код';
    ?>
    <div class="form">
        <form class="contactform" action="/result" method="POST"> 
            @csrf
            <label class="label_title" for="phone">{{$msg_tel}}</label>
            <input class="input_size" type="tel" id="phone" name="phone" placeholder="89001112233" maxlength="11" minlength="11" autocomplete="off" required />
            <label class="label_title" for="pin">{{$msg_pin}}</label>
            <input class="input_size" type="tel" id="pin" name="pin" placeholder="1234"  maxlength="4" minlength="4" autocomplete="off" required />
            <input class="bottom" name="submit" id="submit" value="Отправить" type="submit"> 	 
        </form> 
    </div>

@include('layout.footer')
