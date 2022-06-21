import { useContext, useState } from "react";
import DataContext from "./DataContext";

function Create() {
    const {setCreateAnimal} = useContext(DataContext);

    const [animal, setAnimal] = useState('');
    const [weight, setWeight] = useState('');

    const create = () => {
        setCreateAnimal({animal, weight});
        setAnimal('');
        setWeight('');
    }
  return (
    <div className="col-5">
      <div className="card mt-4">
        <div className="card-header">
          <h2>PRIDĖK GYVŪNĄ</h2>
        </div>
        <div className="card-body">
          <div className="form-group">
            <label for="exampleInputEmail1">Gyvulys</label>
            <input type="text" className="form-control" value={animal} onChange={e => setAnimal(e.target.value)} />
            <small className="form-text text-muted">Įrašykite gyvūną.</small>
          </div>

          <div className="form-group">
            <label for="exampleInputEmail1">Gyvulio svoris</label>
            <input type="text" className="form-control" value={weight} onChange={e => setWeight(e.target.value)} />
            <small className="form-text text-muted">
              Įrašykite gyvūno svorį.
            </small>
          </div>
          <button type="button" className="btn btn-outline-success" onClick={create}>Create</button>
        </div>
      </div>
    </div>
  );
}

export default Create;
