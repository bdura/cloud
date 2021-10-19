import requests
import yaml


if __name__ == "__main__":

    with open("domains.yml", "r") as f:
        domains = yaml.load(f, Loader=yaml.FullLoader)

    for domain, credentials in domains.items():
        username, password = credentials["username"], credentials["password"]

        r = requests.get(
            f"https://{username}:{password}@domains.google.com/nic/update?hostname={domain}"
        )

        if r.status_code != 200:
            print(f"Issue with {domain}")
