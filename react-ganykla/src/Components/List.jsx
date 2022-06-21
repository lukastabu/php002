import { useContext } from "react";
import DataContext from "./DataContext";

function List() {
  const { animals } = useContext(DataContext);
  console.log(animals)
  return (
    <div className="col-7">
      <div className="card mt-4">
        <div className="card-header">
          <h2>VISI TURIMI GYVŪNAI</h2>
        </div>
        <div className="card-body"></div>
        <ul className="list-group">
            {
               animals.length>0 && animals.map(a => <li className="list-group-item" key={a.id}>GYVULYS: <b>{a.animal}</b> SVORIS: <b>{a.weight} kg</b> </li> )
            }
          
        </ul>
      </div>
    </div>
  );
}

export default List;
