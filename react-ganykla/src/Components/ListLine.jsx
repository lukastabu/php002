import { useContext } from "react";
import DataContext from "./DataContext";

function ListLine({animal}) {

    const {setDeleteAnimal, setModalAnimal} = useContext(DataContext);

    const remove = () => {
        setDeleteAnimal(animal);
    }

    const edit = () => {
        setModalAnimal(animal);
    }

    return(
        <li className="list-group-item">
            <div className="one-animal">
            <div className="one-animal__content">            
            GYVULYS: <b>{animal.animal}</b> <span> SVORIS: <b>{animal.weight} kg</b> </span>
            </div>
            <div className="one-animal__buttons">
            <button type="button" className="btn btn-outline-primary mr-2" onClick={edit}>Edit</button>
            <button type="button" className="btn btn-outline-danger" onClick={remove}>Delete</button>
            </div>            
            </div>
        </li>
    )
}

export default ListLine;