var input = [1,12,2,3,1,1,2,3,1,3,4,3,1,5,0,3,2,9,1,19,1,19,5,23,1,23,6,27,2,9,27,31,1,5,31,35,1,35,10,39,1,39,10,43,2,43,9,47,1,6,47,51,2,51,6,55,1,5,55,59,2,59,10,63,1,9,63,67,1,9,67,71,2,71,6,75,1,5,75,79,1,5,79,83,1,9,83,87,2,87,10,91,2,10,91,95,1,95,9,99,2,99,9,103,2,10,103,107,2,9,107,111,1,111,5,115,1,115,2,119,1,119,6,0,99,2,0,14,0]

func determineInputState(input: [Int]) -> [Int] {
  var i = 0
  var output = input

  while (i < output.count && output[i] != 99) {
    switch (output[i]) {
    case 1:
      output[output[i+3]] = output[output[i+1]] + output[output[i+2]]
    case 2:
      output[output[i+3]] = output[output[i+1]] * output[output[i+2]]
    default:
      print("uh oh, this isn't supposed to happen")
    }
  
    i += 4
  }
  
  return output
}

for var noun in 0...99 {
  for var verb in 0...99 {
    var test = input
    test[1] = noun
    test[2] = verb
    
    let state = determineInputState(input: test)
    
    if state[0] == 19690720 {
      print (noun)
      print (verb)
    }
  }
}