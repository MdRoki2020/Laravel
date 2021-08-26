<h1>Add Member</h1>
@if(session('user'))
<h3 style='color: green'>{{session('user')}} user has been added</h3>
@endif
<form action='addmember' method='POST'>
    @csrf
    <input type='text' name='user' placeholder='Enter Username'/><br/><br/>
    <input type='password' name='password' placeholder='Enter Password'/><br/><br/>
    <input type='text' name='email' placeholder='Enter User Email'/><br/><br/>
    <button>Add Member</button>
</form>