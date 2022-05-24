import { useState } from "react";
import "./App.css";
import isCapital from "../../Functions/isCapital";


function App() {  

  const dogs = ['šuo', 'šunius', 'Bobikas', 'kudlius', 'Šarikas', 'avigalvis'];
  const sortDogs = dogs.reverse();

  
  return (
    <div className="App">
    <header className="App-header">

      <div>
      {sortDogs.map((sortDog, i) => isCapital(sortDog) ? null : <div key={i}>{sortDog}</div>)
      }</div>


    </header>
    </div>
  );
}

export default App;
