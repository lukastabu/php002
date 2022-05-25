// import { useEffect, useState } from "react";
import { useEffect, useRef, useState } from "react";
import "./App.css";
import rand from "../../Functions/rand";
// import axios from 'axios';

function App() {  

  const [kv, setKv] = useState(null);
  const istorija = useRef([]);

  // pirmas uzkrovimas
  useEffect (() => {
    setKv(JSON.parse(localStorage.getItem('kv')));
  }, []);

  // UZSAUGOS POKYCIUS
  useEffect( () => {
    if (null === kv) {
      return;
    }
    localStorage.setItem('kv', JSON.stringify(kv));
    istorija.current.unshift(kv);
    console.log(istorija.current);
  }, [kv]);

  const prideti = () => {
    const kiekis = rand(2, 4);
    const kvadratai = [];
    for (let index = 0; index < kiekis; index++) {
      kvadratai.push('1');
    }
    // setKv(kvadratai);
    setKv(k => 
      null === k ? [kvadratai] : [...k, ...kvadratai]);
    ;
  }

  const isvalyti = () => {
    setKv([]);
  }

  const atgal = () => {
    let senas = istorija.current.shift();
    if (senas) {
      setKv([]);
    } else if (senas.length === kv.length) {
      senas = istorija.current.shift();
      if (senas) {
        setKv([]);  
      }
    } else setKv(senas);
  }

  return (
    <div className="App">
    <header className="App-header">

    <div className="kbc">  {
      kv ? kv.map((k, i) => <div key={i} className="kv-block">{k}</div>) : null  
  }
    </div>

    <button onClick={prideti}>PRIDETI</button>
    <button onClick={isvalyti}>ISVALYTI</button>
    <button onClick={atgal}>ATGAL</button>
    </header>
    </div>
  );
}

export default App;
