<h1>Welcom Page</h1>
<x-message-banner msg="User Login Successfully" class="success"/>
<x-message-banner msg="User Logout Successfully" class="success"/>
<x-message-banner msg="Some Error Ocured" class="error"/>
<x-message-banner msg="Some Warning Ocured" class="warning"/>

<style>
    .success{
        color : green;
    }
    .error{
        color : red;
    }
    .warning{
        color : yellow;
    }
</style>