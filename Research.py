import numpy as np
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import cosine_similarity 
from pathlib import Path

# Sample CV and job posting texts (you can replace them with your own data)
cv_text=Path('resume.txt').read_text()

job_posting_text = """
We are looking for a Python developer with experience in machine learning and NLP. The ideal candidate should be familiar with deep learning frameworks such as TensorFlow and PyTorch.
Strong problem-solving skills and a passion for tackling challenging projects are essential for this role.
"""

# Tokenization and stopword removal
def preprocess_text(text):
    stop_words = set([
        "i", "am", "an", "with", "in", "have", "of", "and", "is", "for", "the", "a", "to", "on", "are", "we", "this",
        "should", "be", "such", "as", "and", "or", "are", "by", "at", "about", "our", "my", "you", "your", "from",
        "that", "it", "am", "excited", "the", "to", "work", "an", "experience", "i", "have", "a", "an", "is", "are",
        "in", "with", "should", "be", "for", "of", "this", "am", "the", "on", "it", "your", "our", "we", "are", "at",
        "by", "about", "tackling", "challenging", "projects", "a", "i", "have", "in", "we", "looking", "for", "with",
        "should", "be", "such", "as", "the", "and", "are", "essential", "this", "role."
    ])

    tokens = text.lower().split()
    return [token for token in tokens if token.isalpha() and token not in stop_words]

# Preprocess CV and job posting texts
cv_tokens = preprocess_text(cv_text)
job_posting_tokens = preprocess_text(job_posting_text)

# Convert tokens back to strings to use with TfidfVectorizer
cv_text_preprocessed = ' '.join(cv_tokens)
job_posting_text_preprocessed = ' '.join(job_posting_tokens)

# Combine CV and job posting texts into a list
texts = [cv_text_preprocessed, job_posting_text_preprocessed]

# TF-IDF Vectorization
vectorizer = TfidfVectorizer()
tfidf_matrix = vectorizer.fit_transform(texts)
# Calculate Cosine Similarity
cosine_sim = cosine_similarity(tfidf_matrix[0], tfidf_matrix[1])

# Calculate the similarity percentage
similarity_percentage = round(cosine_sim[0][0] * 100, 2)

# print(f"Similarity Between Resume & Job Posting: {similarity_percentage}%")


# Write the output to a text file
lines = f"Similarity Between Resume & Job Posting: {similarity_percentage}%"
with open('result.txt', 'w') as f:
    f.writelines(lines)
