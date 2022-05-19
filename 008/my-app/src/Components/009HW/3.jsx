function Zib({spalva}) {
    const a = (spalva === 1) ? 'blue' : 'red';
    return <h1 style = {
        {
            color: a
        }
    }>Zebrai ir Bebrai</h1>
}

export default Zib;