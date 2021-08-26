<h1>User Login</h1>
<form action='user' method='POST'>
    @csrf
    <input type='text' name='user' placeholder='Enter Username'/><br/>
    <input type='password' name='password' placeholder='Enter password'/><br/>
    <button type='submit'>Login</button>
</form>