function Labas({spalva, size, skaicius=0}) {
    return <h1 style = {
        {
            color: spalva,
            fontSize: size +'px'
        }
    }>Laabas, {skaicius + 2}</h1>
}

export default Labas;