import { useEffect, useState } from 'react';
import './App.css';
import './bootstrap.css';
import Create from './Components/Create';
import DataContext from './Components/DataContext';
import List from './Components/List';
import axios from 'axios';

function App() {
  const [animals, setAnimals] = useState([]);
  const [createAnimal, setCreateAnimal] = useState(null);
  const [lastUpdate, setLastUpdate] = useState(Date.now());

  useEffect(() => {
    axios.get('http://localhost/bit22/php/server-ganykla/animals')
    .then(res=> setAnimals(res.data))
    // .then(res => setAnimals(res.data));
  }, [lastUpdate]);

  useEffect(() => {
    if(null === createAnimal) return;
    axios.post('http://localhost/bit22/php/server-ganykla/animals', createAnimal)
      .then(_ => setLastUpdate(Date.now()));
  }, [createAnimal]);


return (
  <DataContext.Provider value={
    {
      animals, 
      setCreateAnimal
      }
  }>
<div className="container">
  <div className="row">
    <Create />
    <List />
  </div>
</div>
</DataContext.Provider>
  );
}

export default App;
