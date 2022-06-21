function ListLine({animal}) {
    return(
        <li className="list-group-item">GYVULYS: <b>{animal.animal}</b> SVORIS: <b>{animal.weight} kg</b> </li>
    )
}

export default ListLine;