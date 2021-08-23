<div class="row register-form">
    @csrf
    <div class="col-md-6">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="First Name *" value=""
                name="fullName" id="fullName" />
        </div>

        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password *" value=""
                name="password" id="password" />
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Confirm Password *"
                value="" />
        </div>
        <div class="form-group">
            <div class="maxl">
                <label class="radio inline">
                    <input type="radio" name="genderId" id="1" value="male" checked>
                    <span> Male </span>
                </label>
                <label class="radio inline">
                    <input type="radio" name="genderId" id="2" value="female">
                    <span>Female </span>
                </label>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Your Email *" value=""
                name="email" id="email" />
        </div>
        <div class="form-group">
            <input type="text" minlength="10" maxlength="10" class="form-control"
                placeholder="Your Phone *" value="" name="userPhone" id="userPhone" />
        </div>
        <input type="submit" class="btnRegister" value="Register" />
    </div>
</div>