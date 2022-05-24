function isCapital (aaa) {
    const capitals = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "Š", "T", "U", "V", "W", "X", "Y", "Z"];
    const pirmaA = aaa.slice(0, 1);
    return capitals.includes(pirmaA);
}

export default isCapital;