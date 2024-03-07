# take file, split on each line, de-duplicate, and print as a list, remove the newline character

class A:
    def test(self):
        pass

    def test2(self):
        pass

    def function_name_here():
        with open("pagination_error.txt") as f:
            lines = f.readlines()
            lines = list(set(lines))
            lines = [line.strip() for line in lines]
            print(len(lines))



a = A()
a.function_name_here()
