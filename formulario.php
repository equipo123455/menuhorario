body {
    font-family: Arial, sans-serif;
    background-color: #0cb397;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: url(login.jpg);
    background-size: cover;
    background-position: center;

}
  
  .container {
    max-width: 400px;
    padding: 40px;
    background-color: #0a6e5e;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(39, 18, 48, 0.1);
  }
  
  h1 {
    text-align: center;
    margin-bottom: 30px;
  }
  
  form {
    display: flex;
    flex-direction: column;
  }
  
  form input {
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  
  button {
    padding: 10px;
    background-color: #760b96;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  button:hover {
    background-color: #0a7f5c;
  }
  
  .error-message {
    color: red;
    text-align: center;
    margin-top: 10px;
  }