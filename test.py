try:
    import pandas as pd
    import numpy as np
    import seaborn as sns
    import matplotlib.pyplot as plt
    from random import randint

    skills = pd.read_csv("skills.csv")

    import sys

    text = sys.argv[-1]

    # file = open("job_desc_2.txt", "r")
    # text = file.read().lower()
    # file.close()
    points = {}

    for index, row in skills.iterrows():
        count = text.count(" " + row["name"] + " ")
        if count != 0:
            points[row["name"]] = count

    def addToScore(key, value):
        if key in final_scores.keys():
            final_scores[key] += value
        else:
            final_scores[key] = value


    final_scores = {}
    key_list = list(points.keys())

    for index, row in skills.iterrows():
        if row["name"] in key_list:
            addToScore(row["name"], 15 * points[row["name"]])
        score = 2
        for i in range(1, 1):
            addToScore(row["related_" + str(i)], score)
            score -= 1

    final_scores_list = []
    for key in final_scores.keys():
        final_scores_list.append([final_scores[key], key])

    final_scores_list = sorted(final_scores_list)[::-1]

    data = np.array(final_scores_list)
    data[:,[0, 1]] = data[:,[1, 0]]

    sns.set(style="ticks", context="talk")
    plt.style.use("dark_background")
    plt.figure(figsize=(15,10))
    plt.xlabel("Best Terms", fontsize=24)
    plt.ylabel("Scores", fontsize=24)

    chart = sns.barplot(y=data[:25, 0], x=data[:25, 1].astype(int))


    random = randint(1000000, 9999999)
    filename = "plots/" + str(random) + ".png"
    plt.savefig(filename, bbox_inches='tight', facecolor="#222222")
    print(filename)
except:
    print("error")
