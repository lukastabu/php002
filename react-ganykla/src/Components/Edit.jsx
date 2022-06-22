import { useContext, useState, useEffect } from "react";
import DataContext from "./DataContext";

function Edit() {
  const { modalAnimal, setModalAnimal, setEditAnimal } = useContext(DataContext);

  const [animal, setAnimal] = useState("");
  const [weight, setWeight] = useState("");

  const close = () => {
    setModalAnimal(null);
  }

  useEffect(() => {
    if (null === modalAnimal) return;
    setAnimal(modalAnimal.animal);
    setWeight(modalAnimal.weight);
  }, [modalAnimal])

  const edit = () => {
      setEditAnimal({animal, weight, id:modalAnimal.id});
      setModalAnimal(null);
  }

  if (null === modalAnimal) {
    return null;
  }

  return (
    <div className="modal">
      <div className="modal-dialog modal-dialog-centered">
        <div className="modal-content">
          <div className="modal-header">
            <h3 className="modal-title">Pakoreguok Gyvulį</h3>
            <button
              type="button"
              className="close"
              data-dismiss="modal"
              aria-label="Close"
              onClick={close}
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div className="modal-body">
            <div className="card mt-4">
              <div className="card-body">
                <div className="form-group">
                  <label for="exampleInputEmail1">Gyvulys</label>
                  <input
                    type="text"
                    className="form-control"
                    value={animal}
                    onChange={(e) => setAnimal(e.target.value)}
                  />
                  <small className="form-text text-muted">
                    Įrašykite gyvūną.
                  </small>
                </div>

                <div className="form-group">
                  <label for="exampleInputEmail1">Gyvulio svoris</label>
                  <input
                    type="text"
                    className="form-control"
                    value={weight}
                    onChange={(e) => setWeight(e.target.value)}
                  />
                  <small className="form-text text-muted">
                    Įrašykite gyvūno svorį.
                  </small>
                </div>
              </div>
            </div>
          </div>
          <div className="modal-footer">
            <button type="button" className="btn btn-outline-primary" onClick={edit}>
              Išsaugoti
            </button>
            <button
              type="button"
              className="btn btn-outline-danger mr-3"
              data-dismiss="modal"
              onClick={close}
            >
              Atšaukti
            </button>

          </div>
        </div>
      </div>
    </div>
  );
}

export default Edit;
