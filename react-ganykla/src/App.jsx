import { useEffect, useState } from 'react';
import './bootstrap.css';
import './App.scss';
import Create from './Components/Create';
import DataContext from './Components/DataContext';
import List from './Components/List';
import axios from 'axios';
import Edit from './Components/Edit';

function App() {
  const [animals, setAnimals] = useState([]);
  const [createAnimal, setCreateAnimal] = useState(null);
  const [deleteAnimal, setDeleteAnimal] = useState(null);
  const [modalAnimal, setmodalAnimal] = useState(1);
  
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

  useEffect(() => {
    if(null === deleteAnimal) return;
    axios.delete('http://localhost/bit22/php/server-ganykla/animals/' + deleteAnimal.id)
      .then(_ => setLastUpdate(Date.now()));
  }, [deleteAnimal]);

return (
  <DataContext.Provider value={
    {
      animals, 
      setCreateAnimal,
      setDeleteAnimal,
      modalAnimal,
      setmodalAnimal
      }
  }>
<div className="container">
  <div className="row">
    <Create />
    <List />
  </div>
</div>
<Edit />
</DataContext.Provider>
  );
}

export default App;
