import { useState } from "react";
import "./App.css";
import randNum from "../../Functions/randNum";

function App() {  

  const dogs = ['šuo', 'šunius', 'Bobikas', 'kudlius', 'Šarikas', 'avigalvis'];
  const sortDogs = dogs.reverse();
  const [radius, setRadius] = useState("50%");

  
  // const set = () => {setRadius(r => radius === '0%' ? '50%' : '0%')};

  return (
    <div className="App">
    <header className="App-header">

      <div>
        
        {sortDogs.map((sortDog, i) => i % 2 ? <div key={i} className="kv-block">{(i+1)}<br></br>{sortDog}</div> : <div key={i} className="Shape" style={{borderRadius: radius}}>{(i+1)}<br></br>{sortDog}</div>)
        // kv.map ((k, i) => <div key={i} className="kv" style={{background: k}}>{i}</div>)
      }</div>

      {/* {sortDogs.map((sortDog, i) => i % 2 ? 
      <div key={i} className="Shape" style= {border-radius: '50%'}>{sortDog}</div>) :
      <div key={i} className="kv-block">{(i+1)}<br></br>{sortDog}</div>)
        // kv.map ((k, i) => <div key={i} className="kv" style={{background: k}}>{i}</div>)
      }</div> */}

  {/* <div className="Shape" style={{borderRadius: radius}}>'a'</div> */}
    </header>
    </div>
  );
}

export default App;
