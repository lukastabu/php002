import { useEffect, useState } from "react";
import "./App.css";
import axios from 'axios';

function App() {  

  const [count, setCount] = useState(1);
  const [cats, setCats] = useState([]);

  useEffect( () => {
   console.log('GOOO');
  }, []);   // pasileidzia bet kada, jei nera nk nurodyta, pridejus tuscia masyva - pasileis, tik kai jis pasikeis (o jis ihardkodintas)      


  useEffect ( () => {
    axios.get('http://localhost/bit22/php/011/')
    .then (res => {
      console.log(res.data);
      setCats(res.data);
    });
  }, [])

  return (
    <div className="App">
    <header className="App-header">
    <div>{cats}</div>
    </header>
    </div>
  );
}

export default App;
