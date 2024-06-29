puts RubyVM::InstructionSequence.compile("puts 'HelloWorld!\n'", "HelloWorld.rb").to_binary
