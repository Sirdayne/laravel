<div class="modal-back"></div>

    <div class="modal-wrapper">
        <div class="modal">
            <div class="modal-close"></div>

            <div class="modal-title">Заполните поля ниже и мы свяжемся с Вами в ближайшее время</div>

            <form method="POST" action="/feedback/send_mail">
                {{ csrf_field() }}
                <div class="btns-row">
                    <input type="text" name="Name" placeholder="Имя" required>
                    <input type="tel" id="client-tel-for-consult" name="Telephone" placeholder="Телефон" required>
                </div>
                
                <div class="btns-row">
                    <button class="send-btn btn-pur">Отправить</button>
                </div>
            </form>
        </div>
        
        <div class="modal-calc">
            <div class="modal-close"></div>

            <div class="modal-title">Заполните поля ниже и отправьте нам заказ</div>

            <form method="POST" action="/feedback/send_calc">
                {{ csrf_field() }}
                <!-- Hidden Required Fields -->
                <input type="hidden" id="calc-model" name="Model" value="">
                <input type="hidden" id="calc-size" name="Size" value="">
                <input type="hidden" id="calc-quantity" name="Quantity" value="" type="number">
                <input type="hidden" id="calc-price" name="Price" value="">
                <!-- END Hidden Required Fields -->
                
                <div class="btns-row">
                    <input type="text" name="Name" placeholder="Имя" required>
                    <input type="tel" id="client-tel-for-consult-2" name="Telephone" placeholder="Телефон" required>
                </div>
                
                <div class="btns-row">
                    <button class="send-btn btn-pur">Отправить</button>
                </div>
            </form>
        </div>  
        
        <div class="thx"><p>СПАСИБО! С ВАМИ СВЯЖЕТСЯ НАШ МЕНЕДЖЕР</p></div>   

        <!--
        <input type="hidden" name="project_name" value="window-fashion.kz">
        <input type="hidden" name="admin_email" value="tester@ginnova.kz">
        <input type="hidden" name="form_subject" value="Заявка">
        -->
</div>